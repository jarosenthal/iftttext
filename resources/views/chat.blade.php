@extends('layouts.app')

@section('content')
    <contact-list :active="active"></contact-list>
    <div class="chat" v-if="active">
        <contact :contact="active"></contact>
        <message-history :messages="messages"></message-history>
        <form class="chat-message" v-on:submit.prevent="send">
            <textarea v-model="message" placeholder="Type your message" v-on:keypress.enter.prevent="send"></textarea>
            <i class="fa fa-file-o"></i><i class="fa fa-file-image-o"></i>
            <button>Send</button>
        </form>
    </div>
@endsection