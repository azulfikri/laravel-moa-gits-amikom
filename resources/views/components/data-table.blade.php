<div class="overflow-x-auto w-full">
    <table class="min-w-full text-sm text-center">
        <thead>
            <tr>
                @foreach ($headers as $header)
                    <th class="border bg-gray-200 px-4 py-2">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    @foreach ($item as $value)
                        <td class="border px-4 py-2">{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>