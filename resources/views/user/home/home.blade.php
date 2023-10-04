<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personal Timeline') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!--Section: Newsfeed-->
                <!DOCTYPE html>
                <html>
                <title>Social App</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
                      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                      crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                        crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <body>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="col-md-8 offset-md-2">

                                <div class="d-flex mb-3">
                                    <a href="">
                                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                             class="border rounded-circle me-2"
                                             alt="Avatar" style="height: 40px"/>

                                    </a>
                                    <div>
                                        <a href="" class="text-dark mb-0">
                                            <strong>{{ Auth::user()->username }}</strong>
                                        </a>
                                        <a href="" class="text-muted d-block" style="margin-top: -6px">
                                            <small>10h</small>
                                        </a>
                                    </div>
                                </div>

                                <form action="{{ 'new-post' }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="" style="max-width: 42rem">
                                        <textarea type="text" name="content" class="form-control" id=""></textarea>
                                        <input type="file" name="image_path" class="form-control" id="">
                                        <button type="submit" class="text-right btn btn-primary px-5">Post</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                </section>
                <br> <br>
                <!--Section: Newsfeed-->


                @php $i=1 @endphp
                @foreach($posts as $post)

                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                </div>
                                <div class="col-md-8 offset-md-2">
                                    <div class="card" style="max-width: 42rem">
                                        <div class="card-body">
                                            <!-- Data -->
                                            <div class="d-flex mb-3">
                                                <a href="">
                                                    <img src="{{ asset('storage/'. $post->profile_photo_path) }}"
                                                         class="border rounded-circle me-2"
                                                         alt="Avatar" style="height: 40px"/>
                                                </a>
                                                <div>
                                                    <a href="" class="text-dark mb-0">
                                                        <strong>{{ $post->username }}</strong>
                                                    </a>
                                                    <a href="" class="text-muted d-block" style="margin-top: -6px">
                                                        <small>{{ $post->created_at }}</small>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Description -->
                                            <div>
                                                <p>
                                                    {{ $post->content }}
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Media -->
                                        <div class="bg-image hover-overlay ripple rounded-0"
                                             data-mdb-ripple-color="light">
                                            <img src="{{ asset($post->image_path) }}" class="w-100"/>
                                            <a href="#!">
                                                <div class="mask"
                                                     style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                            </a>
                                        </div>
                                        <!-- Media -->
                                        <!-- Interactions -->
                                        <div class="card-body">
                                            <!-- Reactions -->
                                            <div class="d-flex justify-content-between mb-3">
                                                <div>
                                                    <a href="">
                                                        <i class="fas fa-thumbs-up text-primary"></i>
                                                        <i class="fas fa-heart text-danger"></i>
                                                        <span>124</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="" class="text-muted"> 8 comments </a>
                                                </div>
                                            </div>
                                            <!-- Reactions -->

                                            <!-- Buttons -->
                                            <div
                                                class="d-flex justify-content-between text-center border-top border-bottom mb-4">
                                                {{--                                                <button id="like-button" type="button" class="btn btn-link btn-lg like-button" data-post-id="{{ $post->id }}" data-user-id="{{ Auth::user()->id }}" data-mdb-ripple-color="dark">--}}
                                                {{--                                                    <i class="fas fa-thumbs-up me-2"></i>Like--}}
                                                {{--                                                </button>--}}
                                                <button type="button" class="btn btn-link btn-lg like-button"
                                                        data-mdb-ripple-color="dark">
                                                    <i class="fas fa-thumbs-up me-2"></i>Like
                                                </button>


                                                <button type="button" class="btn btn-link btn-lg"
                                                        data-mdb-ripple-color="dark">
                                                    <i class="fas fa-comment-alt me-2"></i>Comment
                                                </button>
                                                <button type="button" class="btn btn-link btn-lg"
                                                        data-mdb-ripple-color="dark">
                                                    <i class="fas fa-share me-2"></i>Share
                                                </button>
                                            </div>
                                            <!-- Buttons -->

                                            <!-- Comments -->

                                            <!-- Input -->
                                            <div class="d-flex mb-3">
                                                <a href="">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp"
                                                         class="border rounded-circle me-2"
                                                         alt="Avatar" style="height: 40px"/>
                                                </a>
                                                <div class="form-outline w-100">
                                                    <textarea class="form-control" id="textAreaExample"
                                                              rows="2"></textarea>
                                                    <label class="form-label" for="textAreaExample">Write a
                                                        comment</label>
                                                </div>
                                            </div>
                                            <!-- Input -->

                                            <!-- Answers -->

                                            <!-- Single answer -->
                                            <div class="d-flex mb-3">
                                                <a href="">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp"
                                                         class="border rounded-circle me-2"
                                                         alt="Avatar" style="height: 40px"/>
                                                </a>
                                                <div>
                                                    <div class="bg-light rounded-3 px-3 py-1">
                                                        <a href="" class="text-dark mb-0">
                                                            <strong>Malcolm Dosh</strong>
                                                        </a>
                                                        <a href="" class="text-muted d-block">
                                                            <small>Lorem ipsum dolor sit amet consectetur,
                                                                adipisicing elit. Natus, aspernatur!</small>
                                                        </a>
                                                    </div>
                                                    <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                                    <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                                                </div>
                                            </div>

                                            <!-- Answers -->

                                            <!-- Comments -->
                                        </div>
                                        <!-- Interactions -->
                                    </div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Section: Newsfeed-->
                @endforeach


                <script>
                    $(document).ready(function () {
                        $('.like-button').click(function () {
                            var postId = $(this).data('post-id');
                            var userId = $(this).data('user-id');
                            var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get the CSRF token from the meta tag

                            // Perform an Ajax request here
                            $.ajax({
                                type: 'GET',
                                url: 'like',
                                data: {
                                    postId: postId,
                                    userId: userId,
                                    _token: csrfToken
                                },
                                success: function (response) {
                                    console.log(postId);
                                },
                                error: function (error) {
                                    // console.error(error);
                                }
                            });
                        });
                    });
                </script>

                </body>
                </html>

            </div>
        </div>
    </div>
</x-app-layout>



