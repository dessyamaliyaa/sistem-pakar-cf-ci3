    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-app"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Form Ubah Informasi ISPA</h2>
                                            <p>Welcome to SP ISPA</p>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End--> 
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                    <div class="form-element-list">
                        <div class="row">              
                          
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form action="<?php echo base_url('info/ubah/'.$info['id_info']); ?>" method="post">
                                <div class="form-group">                                    
                                    <div class="nk-int-st">
                                    <label>Informasi ISPA</label>
                                    <input type="hidden" name="content" value="<?= html_escape($content) ?>">
                                        <textarea  class="tinymce" id="mytextarea" name="info_content" value="123"><?php echo $info['info_content']; ?></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="simpan" class="btn btn-success notika-btn-success">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End
    <script type="text/javascript" src="<?php echo base_url().'/assets/js/jquery-3.4.0.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/assets/js/bootstrap.bundle.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/assets/summernote/summernote-bs4.js';?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });
 
            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('post/upload_image')?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
 
            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php echo site_url('post/delete_image')?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
 
        });
         
    </script> 
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
  var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
      toolbar: [
        [{ header: [1, 2, 3, 4, 5, 6, false] }],
        [{ font: [] }],
        ["bold", "italic"],
        ["link", "blockquote", "code-block", "image"],
        [{ list: "ordered" }, { list: "bullet" }],
        [{ script: "sub" }, { script: "super" }],
        [{ color: [] }, { background: [] }],
      ]
    },
  });
  quill.on('text-change', function (delta, oldDelta, source) {
    document.querySelector("input[name='content']").value = quill.root.innerHTML;
  });
</script> -->
