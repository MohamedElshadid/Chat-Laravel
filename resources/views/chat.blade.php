<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    
    <div class="containr">
        <div class="row" id="app">
            <div class="offset-md-4 col-md-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active" aria-current="true">Chat Room
                <span class="badge badge-pill bg-danger">
                    @{{numbersOfUsers}}
                </span></li>
                <ul class="list-group" v-chat-scroll>
                    <message v-for="(value,index) in chat.message"
                     :key="index"
                     :color=chat.color[index]
                     :user=chat.user[index]
                     
                     :time=chat.time[index]>
                        @{{value}}
                    </message>
                </ul>
                <div class="badge badge-pill bg-primary">@{{typing}}</div>
                <input type="text" class="form-control"
                v-model="message" @keyup.enter="send"
                placeholder="Type your messgae here!!!">
                <br>
                <a href="" @click.prevent="deleteSession" class="btn btn-danger btn-sm">Delete Chats</a>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>