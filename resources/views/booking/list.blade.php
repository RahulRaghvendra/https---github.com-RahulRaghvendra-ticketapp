<x-layout>
    @push('styles')
        <link rel="stylesheet" href="/css/custom-page.css">
    @endpush

    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div class="mb-2 mt-2" style="width:150px;">
                    <span style="font-size:18px;">My Bookings</span>
                </div>
            </div>
            <div class="col-6 text-end">
               
            </div>
        </div>

        <table class="dataTable table table-striped mt-5" id="myTable" 
        style="border: 1px solid var(--bs-gray-400);">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Event Date</th>
                    <th scope="col">Booked At</th>
                  
                </tr>
            </thead>
            <tbody>
                @forelse ($bookings as $index => $booking)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $booking->event_name }}</td>
                        <td>{{ date('d-m-Y', strtotime($booking->event_date)) }}</td>
                        <td>{{ date('d-m-Y', strtotime($booking->booked_at))}}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No bookings found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

      
        <div class="mt-3">
            {{ $bookings->links() }}
        </div>
    </div>

    <x-pop-up/>

    @push('scripts')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
              
            });
        });
    </script>
    @endpush
</x-layout>
