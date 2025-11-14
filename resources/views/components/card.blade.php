
<div {{ $attributes->merge(['class' => 'bg-pink-600 w-[350px] flex flex-col justify-center items-center p-5 gap-4 rounded' . ($shadow ? ' shadow-xl' : '')]) }}>
    <div class="mb-4">
        {{ $header ?? 'ini bagian header' }}
    </div>
    <div>
        {{ $content ?? 'ini bagian content' }}
    </div>
    <div class="mt-4">
       {{ $footer ?? 'ini bagian footer' }}
    </div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>

