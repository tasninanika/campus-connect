<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

<!-- Editor Section -->
<div class="bg-white p-5 mt-6">
    <h2 class="text-center text-black">Leave a Comment</h2>
    <div id="editor">
        <p>Have something to add? We'd love to hear your perspective—drop a comment and spark some dialogue!</p>
        <p><br /></p>
    </div>
    <button class="button p-2 rounded-lg my-2">Comment</button>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    const quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>