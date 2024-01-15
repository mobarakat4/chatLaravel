
<div class="container chat-container">
    <div class="chat-box">
      <div class="chat-header">Chat Room</div>
      <div class="chat-body" id="chatBody" >
        
       
        <!-- Add more messages here -->
        @foreach ($messages as $message)
        
        <div class="message" id="content" >
              <span class="sender">Barakat:</span> {{ $message->message }}
              <div class="timestamp">{{ $message->created_at}}</div>
        </div>
        
    
            
        @endforeach
    
    </div>
    </div>

    <div class="input-group mt-3">
        <form wire:submit="add">
    
            {{-- <textarea class="form-control" placeholder="Type your message..."></textarea> --}}
            <input wire:model="text"  type ="text"class="form-control input" required placeholder="Type your message...">
            <div class="input-group-append">
                <button class="btn input-group-text">Send</button>
            </div>
        </form>
    </div>
  </div>
  <script>
    // Function to scroll down to the bottom
    function scrollDown() {
        var container = document.getElementById('chatBody');
        container.scrollTop = container.scrollHeight;
    }

    // Add an event listener to the container for the 'DOMNodeInserted' event
    var container = document.getElementById('chatBody');
    container.addEventListener('DOMNodeInserted', scrollDown);

    // Simulate adding new content after a delay for demonstration purposes
    setTimeout(function() {
        var newContent = document.createElement('p');
        // newContent.textContent = 'New content added!';
        document.getElementById('content').appendChild(newContent);
    }, 3000); // Add new content after 3 seconds (adjust as needed)



    // document.addEventListener('livewire:load', function () {
    //     Livewire.on('scrollToBottom', function () {
    //         var chatBody = document.getElementById('chatBody');
    //         chatBody.scrollTop = chatBody.scrollHeight;
    //     });
    // });
</script>
  