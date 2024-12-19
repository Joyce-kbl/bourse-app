<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin">
  < script >
    tinymce.init({
      selector: 'textarea#editor',
      plugins: 'table lists wordcount emoticons preview',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline | alignleft aligncenter alignright justify | align bullist numlist  | pagebreak blockquote',
      toolbar_mode: 'sliding',
      content_style: 'body { font-family: Montserrat, poppins; font-size: 16px;}'
    })
</script>
