<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl px-0">
        @if (auth()->user()->can('view_any_industry'))
            <div class="grid w-full auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <x-placeholder-pattern
                        class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>

            </div>
        @else
            <p class="text-red-500">Kamu tidak bisa membuat postingan.</p>
        @endif
    </div>
</div>