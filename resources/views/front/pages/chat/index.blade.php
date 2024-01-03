@extends('front.layouts.master', ['bodyClass' => 'label-bg-col', 'headerClass' => 'header how-it-work-header', 'fullFooter' => true])

@section('title', 'Curator Club - View Chat')

@push('front-styles')
    <style>
        #overlay {
            position: sticky;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            width: 100%;
        }
        #overlay .meimg{
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-top: 30%;
            margin-left: 40%;
        }
    </style>
@endpush

@section('content')
    <!-- CHAT INBOX SECTION BEGIN -->
    <section class="chat-inbox-sec">
        <div class="container-fluid">
            <div class="mobile-dev-hide">
                <div class="row wrap-feature41-box">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <ul class="nav vtab f41-tab">
                            @include('front.pages.chat.users_list')
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12 chat-bg-col">
                        <div class="tab-content" id="myTabContent">
{{--                            id="home" role="tabpanel"--}}
                            <div class="tab-pane fade show active conversation">
{{--                                @include('front.pages.chat.messages')--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CHAT INBOX SECTION END -->
@endsection

@push('front-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://rawgithub.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js?v=0.8.9"></script>
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <script>
        $(function (){
            new WOW().init();
        });

        /*ACCORDIAN SCRIPT BEGIN*/
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });
        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });
        /*ACCORDIAN SCRIPT END*/

        // CHAT FILE UPLOADER SCRIPT BEGIN
        function openFileInput() {
            const fileInput = document.getElementById('file-input');
            fileInput.click();
        }

        function previewFile() {
            const fileInput = document.getElementById('file-input');
            const filePreviewContainer = document.getElementById('file-preview-container');
            const filePreview = document.getElementById('file-preview');
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    filePreview.src = e.target.result;
                    filePreviewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        // CHAT FILE UPLOADER SCRIPT END
        function alertShowUp(message,icon,timer=5000) {
            Swal.fire({
                title: message,
                icon: icon,
                showConfirmButton: false,
                position: 'top-right',
                timer: timer
            });
            return false;
        }

        function showMessage(input,id) {
            receiverId = id;
            $('.conversation').html('<div id="overlay"><img class="meimg" src="{{asset('assets/front/images/loader.gif')}}" /></div>');
            document.getElementById("overlay").style.display = "block";
            $('.chatter-signle').removeClass('active');

            $(input).addClass('active');

            axios.get(receiverId).then(function (res) {
                document.getElementById("overlay").style.display = "none";
                $('.conversation').html(res.data);
                setTimeout(function(){
                    var objDiv = document.getElementById("chat-messages");
                    objDiv.scrollTop = objDiv.scrollHeight;
                }, 500);
            });
            return false;
        }

        function sendMessage() {
            let message = $(':input[name="message"]').val().trim();
            if (message=='') {
                alertShowUp('Text message field is required.');
                return false;
            }
            let receiverId = $(':input[name="receiver_id"]').val();
            let formData = new FormData();
            formData.append('message', message);
            formData.append('receiver_id', receiverId);
            formData.append('media', document.getElementById('file-input').files[0]);

            axios.post("{{route('send.message')}}", formData).then(function (res) {
                if (res.data.status=='success') {
                    if (res.data.preview) {
                        $('.chat-messages').append(res.data.preview);
                        let newPayload = {
                            newMessage: res.data.preview,
                            userId: receiverId
                        };
                        triggerNewEvent(newPayload);
                        setTimeout(function(){
                            var objDiv = document.getElementById("chat-messages");
                            objDiv.scrollTop = objDiv.scrollHeight;
                        }, 500);
                    }
                    $(':input[name="message"]').val('');
                    $(':input[name="media"]').val('');
                    $('#file-preview-container').hide();
                    $('#file-preview-container img').attr('src','');
                    return false;
                }
            }).catch(function (error) {
                notifyUser('There is something wrong','warning',3000);
            });
        }
    </script>
@endpush