<div class="flex bg-error px-4 {{ $text ? 'py-2' : 'py-5'}} text-white">
    @if ($text)
        <i class="bi bi-exclamation-circle-fill mr-2"></i>
    @endif
    <span>
        {{ $text }}
    </span>
</div>
