<div>
    <select wire:model="selectedItems" class="form-control select">
        @foreach ($items as $item)
            <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            $('select').select2();

            Livewire.hook('message.processed', function () {
                $('select').select2();
            });
        });
    </script>
@endpush

