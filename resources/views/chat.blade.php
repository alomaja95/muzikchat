@extends('layouts.chat.app')

@section('content')
    <div style="width: 100%">

        <!-- Chats Page Start -->
        <div class="chats">
            <div class="chat-body">

                <!-- Chat Header Start-->
                <div class="chat-header">
                    <!-- Chat Back Button (Visible only in Small Devices) -->
{{--                    <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none" type="button" data-close="">--}}
{{--                        <!-- Default :: Inline SVG -->--}}
{{--                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>--}}
{{--                        </svg>--}}

{{--                        <!-- Alternate :: External File link -->--}}
{{--                        <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->--}}
{{--                    </button>--}}

                    <!-- Chat participant's Name -->
                    <div class="media chat-name align-items-center text-truncate">
                        <div class="avatar d-none d-sm-inline-block mr-3 " :class="statusIcon">
                            <img src="https://ui-avatars.com/api/?name={{$target->name}}&color=FFFFFF&background=563C5C" alt="">
                        </div>

                        <div class="media-body align-self-center ">
                            <h6 class="text-truncate mb-0">{{$target->name}}</h6>
                            <small class="text-muted">
                                @{{status}}
                            </small>

                        </div>
                    </div>

                    <!-- Chat Options -->
                    <ul class="nav flex-nowrap">

                        <small class="text-muted">@{{ typing }}</small>
                    </ul>
                </div>
                <!-- Chat Header End-->



                <!-- Chat Content Start-->
                <div class="chat-content p-2" id="">
                    <div class="container">


                        <!-- Message Day Start -->
                        <div class="message-day">

                            <div class="message-divider sticky-top pb-2" data-label="Chat">&nbsp;</div>

                           <message
                               v-for="value,index in chat.message"
                               :user="chat.user[index]"
                               :color="chat.color[index]"
                               :time="chat.time[index]"
                               :key="value.index">@{{ value }}</message>

                        </div>
                        <!-- Message Day End -->
                    </div>

                    <!-- Scroll to finish -->
                    <div class="chat-finished" id="chat-finished"></div>
                </div>
                <!-- Chat Content End-->


                <!-- Chat Footer Start-->
                <div class="chat-footer">
                    <div class="form-row">
                        <!-- Chat Input Group Start -->
                        <div class="col">
                            <div class="input-group">
                                <!-- Attachment Start -->
                                <div class="input-group-prepend mr-sm-2 mr-1">
                                    <div class="dropdown">
                                        <button @click.prevent="deleteSession" class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <!-- Default :: Inline SVG -->
                                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>

                                            <!-- Alternate :: External File link -->
                                            <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/plus-circle.svg" alt=""> -->
                                        </button>

                                    </div>
                                </div>
                                <!-- Attachment End -->



                                <!-- Textarea Start-->
                                <textarea v-model="message"  class="form-control transparent-bg border-0 no-resize hide-scrollbar" placeholder="Write your message..." rows="1"></textarea>
                                <!-- Textarea End -->
                            </div>
                        </div>
                        <!-- Chat Input Group End -->

                        <!-- Submit Button Start -->
                        <div class="col-auto">
                            <div class="btn btn-primary btn-icon rounded-circle text-light mb-1" role="button" @click="send">
                                <!-- Default :: Inline SVG -->
                                <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>

                                <!-- Alternate :: External File link -->
                                <!-- <img src="./../assets/media/heroicons/outline/arrow-right.svg" alt="" class="injectable hw-24"> -->
                            </div>
                        </div>
                        <!-- Submit Button End-->
                    </div>
                </div>
                <!-- Chat Footer End-->
            </div>


        </div>
        <!-- Chats Page End -->


    </div>

@endsection

