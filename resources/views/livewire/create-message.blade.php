<div>
    <form class="mt-9" wire:submit="createComment">

        <div>
            <script src="https://cdn.tiny.cloud/1/2t2mluodhq5i93u2z4ajgg1983v43yecj0jp8apgzv7udt7x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                    selector: '#editor',
                    forced_root_block: false,
                    skin: "oxide-dark",
                    content_css: "dark",
                    plugins: 'quickbars table image link lists media autoresize help',
                      toolbar: 'undo redo | blocks | bold italic | alignleft aligncentre alignright alignjustify | indent outdent | bullist numlist',


                    setup: function (editor) {
                        editor.on('init change', function () {
                            editor.save();
                        });
                        editor.on('change', function (e) {
                            @this.set('content', editor.getContent());
                        });
                    }
                });
            </script>

            <div wire:ignore>
                <textarea id="editor"  wire:model="content"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
           
        </div>
    </form>
</div>
