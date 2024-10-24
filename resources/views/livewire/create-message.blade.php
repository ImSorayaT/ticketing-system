<div>
    <form class="mt-9" wire:submit="createComment">

        <div>
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                    selector: '#editor',
                    forced_root_block: false,
                    skin: "oxide-dark",
                    content_css: "dark",

                    setup: function (editor) {
                        editor.on('init change', function () {
                            editor.save();
                        });
                        editor.on('change', function (e) {
                            @this.set('document', editor.getContent());
                        });
                    }
                });
            </script>

            <div>
                <textarea   wire:model="content"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
           
        </div>
    </form>
</div>
