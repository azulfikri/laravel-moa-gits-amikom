<div class="overflow-x-auto w-full">
    @if($creatable && $createRoute)
        <div class="mb-4">
            <a href="{{ route($createRoute) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New</a>
        </div>
    @endif
    <table class="min-w-full text-sm text-center">
        <thead>
            <tr>
                @foreach ($headers as $header)
                    <th class="border bg-gray-200 px-4 py-2">{{ $header }}</th>
                @endforeach
                 @if($editable || $deletable)
                   <th class="bg-gray-200 border border-b px-4 py-2">Actions</th>
               @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    @foreach ($item as $value)
                        <td class="border px-4 py-2">{{ $value }}</td>
                    @endforeach
                    @if ($editable || $deletable)
                        <td class="border-b px-4 py-2">
                            @if($editable && $editRoute)
                                <a href="{{ route($editRoute, ['id' => $item['id']]) }}" class="text-blue-500 mr-2">Edit</a>
                            @endif
                            @if($deletable && $deleteRoute)
                                <form action="{{ route($deleteRoute, [ 'id' => $item['id']]) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">Delete</button>
                                </form>
                            @endif
                        </td>
                        
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>