<template>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <div>
                                    <h3 class="m-0">Welcome back!</h3>
                                </div>


                                <div class="pt-5">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address or username" autofocus/>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" id="inputPassword" class="form-control" placeholder="Password"/>
                                        </div>

                                        <button class="btn btn-lg btn-primary btn-block text-uppercase mt-4" type="submit">log in</button>
                                    </form>
                                </div>


                                <div class="form-footer text-muted">
                                    <div class="pt-4 icons text-center">
                                        <div>
                                            Or use Social Media Account
                                        </div>

                                        <div class="pt-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path d="M320,85.333h64c5.891,0,10.667-4.776,10.667-10.667v-64C394.667,4.776,389.891,0,384,0h-64
                                                        c-64.772,0.071-117.263,52.561-117.333,117.333V192H128c-5.891,0-10.667,4.776-10.667,10.667v64c0,5.891,4.776,10.667,10.667,10.667
                                                        h74.667v224c0,5.891,4.776,10.667,10.667,10.667h64c5.891,0,10.667-4.776,10.667-10.667v-224h74.667
                                                        c4.589-0.003,8.662-2.942,10.112-7.296l21.333-64c1.862-5.589-1.16-11.629-6.749-13.491c-1.084-0.361-2.22-0.546-3.363-0.547h-96
                                                        v-74.667C288,99.66,302.327,85.333,320,85.333z"/>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510">
                                                    <g>
                                                        <g id="glass">
                                                            <path d="M286.875,229.5v63.75h150.45c-15.3,89.25-86.7,153-175.95,153c-104.55,0-191.25-86.7-191.25-191.25
                                                                s86.7-191.25,191.25-191.25c53.55,0,99.45,22.95,132.6,58.65l45.9-45.9c-45.9-45.9-107.1-76.5-178.5-76.5
                                                                c-140.25,0-255,114.75-255,255s114.75,255,255,255s242.25-114.75,242.25-255v-25.5H286.875z"/>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/>
                                                    <path d="m.396 7.977h4.976v16.023h-4.976z"/>
                                                    <path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>


                                    <div class="pt-5">
                                        <span>Do not have an account yet? </span>
                                        <span class="text-uppercase font-weight-bold"><a href=""> sign up</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

</script>


<style>
    body {
        background-color: #fff;
    }
    .login,
    .image {
        min-height: 100vh;
    }
    .bg-image {
        background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
        background-size: cover;
        background-position: center;
    }

    .login input {
        border-radius: .75rem;
        padding: 1.25rem;
    }
    .login button {
        border-radius: .75rem;
        font-size: .85rem;
    }

    .form-footer {
        font-size: 12px;
    }

    .icons span:not(:last-child){
        margin-right: 1.25rem;
    }
    .icons svg {
        height: 16px;
        width: 16px;
        fill: #343a40;
        transition: all 100ms;
    }
    .icons svg:hover {
        fill: #3490dc;
    }
</style>
