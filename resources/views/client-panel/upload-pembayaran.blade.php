@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Upload Bukti Pembayaran</h1>
        </div>
            <div class="col-12">
                <form action=""action="{{ route('upload-berkas') }}" class="MultiFile-intercepted" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card h-50 text-center bg-dark" style="
              display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            color: #d7d7ef;
            font-family: 'LATO', sans-serif">
                <div class="card-body">
                    <div class="file-drop-area" style="
                    margin-top: 30px;
                    position: relative;
                    display: flex;
                    align-items: center;
                    max-width: 100%;
                    padding: 25px;
                    border: 1px dashed rgba(255, 255, 255, 0.4);
                    border-radius: 3px;
                    transition: .2s"> <span class="choose-file-button" style="
                    flex-shrink: 0;
                    background-color: rgba(255, 255, 255, 0.04);
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: 3px;
                    padding: 8px 15px;
                    margin-right: 10px;
                    font-size: 12px;
                    text-transform: uppercase">Choose Files</span> <span class="file-message" style="
                    font-size: small;
                    font-weight: 300;
                    line-height: 1.4;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis">or drag and drop files here</span> <input type="file" name="bukti_pembayaran" class="file-input" style="
                    position: absolute;
                    left: 0;
                    top: 0;
                    height: 100%;
                    widows: 100%;
                    cursor: pointer;
                    opacity: 0" accept=".jfif,.jpg,.jpeg,.png,.gif" multiple>
                    <input type="text" name="user_id" hidden>
                    </div>
                    <div id="divImageMediaPreview"> </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success btn-lg mt-5 text-center">Submit</button>
                </form>
            </div>
    </div>
    <!-- /.container-fluid -->
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).on('change', '.file-input', function() {


var filesCount = $(this)[0].files.length;

var textbox = $(this).prev();

if (filesCount === 1) {
var fileName = $(this).val().split('\\').pop();
textbox.text(fileName);
} else {
textbox.text(filesCount + ' files selected');
}



if (typeof (FileReader) != "undefined") {
var dvPreview = $("#divImageMediaPreview");
dvPreview.html("");
$($(this)[0].files).each(function () {
var file = $(this);
var reader = new FileReader();
reader.onload = function (e) {
var img = $("<img />");
img.attr("style", "width: 150px; height:100px; padding: 10px");
img.attr("src", e.target.result);
dvPreview.append(img);
}
reader.readAsDataURL(file[0]);
});
} else {
alert("This browser does not support HTML5 FileReader.");
}


});
</script>