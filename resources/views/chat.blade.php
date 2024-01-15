<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Chat Design</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
          /* Custom styles for the chat */
          body {
            background-color: #f8f9fa;
            padding-top: 60px; /* Adjust based on your header height */
          }
      
          .chat-container {
            max-width: 600px;
            margin: auto;
          }
      
          .chat-box {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
          }
      
          .chat-header {
            background-color: #00dd11;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
          }
          
          .chat-body {
            max-height: 400px;
            overflow-y: auto;
          }
          
          .message {
            background-color: #4f9c89;
            margin:4px ;
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
            border-radius: 6px;
          }
      
          .message:last-child {
            border-bottom: none;
          }
      
          .message .sender {
            font-weight: bold;
          }
          .input{
            min-width:100%;
            
          }
      
          .message .timestamp {
            font-size: 12px;
            /* color: #6c757d; */
          }
      
          .input-group-text {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
          }
        </style>
    </head>
    <body class="antialiased">
       
        
        
        @livewire('chat')
        <div class="bg-blue">ee</div>
            
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @livewireScripts
       
    </body>
    </html>
    