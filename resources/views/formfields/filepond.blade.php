
<div id="{{ $row->field }}" x-data="{
            serverId: null,
            filepond: undefined,
            init() {
                this.initFilePond();
            },
            initFilePond() {
                //this.filepond = $(this.$refs.filepond).filepond();
                this.filepond = FilePond.create(this.$refs.filepond);

                this.filepond.on('processfile', (error, file) => {
                    if (error) {
                        console.log('Oh no');
                        return;
                    }

                    this.serverId = file.serverId;
                });
                this.filepond.on('removefile', () => {
                    this.serverId = null;
                });
            }
        }">
    @if(isset($image))
        <div class="flex items-center justify-center m-3">
            <img src="{{ $image }}" alt="{{ $row->field }}" class="w-60">
        </div>
    @endif

    <input type="hidden" name="{{ $row->field }}" x-model="serverId">
    <input type="file"
           id="{{ $row->field }}"
           class="filepond"
           name="filepond"
           x-ref="filepond">
</div>

