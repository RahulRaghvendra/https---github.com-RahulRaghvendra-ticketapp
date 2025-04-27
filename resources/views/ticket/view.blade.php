<x-popup>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->


  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">{{$ticket->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$ticket->venue}}</h6>
            <p class="card-text">
              <strong>Date:</strong>{{$ticket->date}}<br>
              <strong>Available Seats:</strong> {{$ticket->available_seats}}<br>
            </p>
          <a href="#" class="btn btn-primary" data-ticket-id="{{ $ticket->id }}">Book Ticket</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <x-toast />
 @push('scripts')
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Define Toast globally
    window.Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
</script>
<script>
  $(document).ready(function(){
      $('.btn-primary').on('click', function(e) {
          e.preventDefault();
          var ticketId = $(this).data('ticket-id');

          Swal.fire({
              title: 'Are you sure?',
              text: "Do you want to book this ticket?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Book it!'
          }).then((result) => {
              if (result.isConfirmed) {
                  // User confirmed booking
                  $.ajax({
                      url: "{{ route('ticket_book') }}", 
                      method: 'POST',
                      data: {
                          ticket_id: ticketId,
                          _token: '{{ csrf_token() }}'
                      },
                      success: function(response) {
                          if(response.success){
                              Toast.fire({
                                  icon: 'success',
                                  title: response.message
                              });
                              // Refresh the page after a short delay
                              setTimeout(function(){
                                  location.reload();
                              }, 3000); // 2-second delay
                          } else {
                              Toast.fire({
                                  icon: 'error',
                                  title: response.message
                              });
                          }
                      },
                      error: function(xhr) {
                          Toast.fire({
                              icon: 'error',
                              title: xhr.responseJSON?.message || 'An unexpected error occurred.'
                          });
                      }
                  });
              }
          });
      });
  });
</script>

 @endpush


</x-popup>