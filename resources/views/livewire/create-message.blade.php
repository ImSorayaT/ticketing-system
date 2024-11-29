<div>
    <form class="mt-9" wire:submit="createComment">

        <div>
            <script src="https://cdn.tiny.cloud/1/2t2mluodhq5i93u2z4ajgg1983v43yecj0jp8apgzv7udt7x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                document.addEventListener('livewire:init', () => {

                    tinymce.init({
                        selector: '#editor',
                        skin: "oxide-dark",
                        content_css: "dark",
                        plugins: 'quickbars table image link lists media autoresize help',
                        toolbar: 'undo redo | blocks | bold italic | alignleft aligncentre alignright alignjustify | indent outdent | bullist numlist',
                        newdocument_content: 'test',
                        setup: function (editor) {
                            editor.on('submit', function (e) {
                                @this.set('content', editor.getContent());
                                
                                console.log('submit');
                                editor.setContent('');
                                console.log(editor.getContent());
                            });
                        },
                    });
                });

            </script>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div wire:ignore>
                <textarea id="editor"  wire:model="content"></textarea>
            </div>
            <div>
                <button type="submit"   >Submit</button>
            </div>
           
        </div>
    </form>
</div>
