<div wire:ignore>
    <input type="text" id="range-slider" name="range-slider" class="input-range" />
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            $('#range-slider').ionRangeSlider({
                min: 0,
                max: 100,
                from: @this.range ?? 0,
                onFinish: function (data) {
                    Livewire.emit('rangeUpdated', data.from);
                }
            });

            Livewire.on('rangeUpdated', function (value) {
                $('#range-slider').data('ionRangeSlider').update({ from: value });
            });
        });
    </script>
@endpush
