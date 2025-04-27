<x-layout>
    @push('styles')
        <link rel="stylesheet" href="/css/custom-page.css">
    @endpush

    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div class="mb-2 mt-2" style="width:85px;">
                    <span style="font-size:18px;">Event List</span>
                </div>
            </div>
            <div class="col-6 text-end">
                
            </div>
        </div>
        {{--  --}}
        <table class="dataTable table table-striped mt-5" id="myTable" 
        style="border: 1px solid var(--bs-gray-400);">
        <thead>
            <tr>
                <th scope="col">S.no</th>
                <th scope="col">Name</th>
                <th scope="col">Venue</th>
                <th scope="col">Date</th>
                <th scope="col">Available Seat</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($events as $index => $designation)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $designation->name }}</td>
                    <td>{{ $designation->venue }}</td>
                    <td>{{ date('d-m-Y', strtotime($designation->date)) }}</td>
                    <td>{{ $designation->available_seats }}</td>
                  
                    <td>
                        <a href="{{route('ticket_view',[$designation->id])}}" data-fancybox
                            data-type="iframe"
                            data-width="800"
                            data-height="700"
                            title="Edit Designation"   class="ms-2">
                          
                            <i class="fas fa-eye"></i>
                        </a> 
                     
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No Task found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
        {{--  --}}
        
    </div>
    <x-pop-up/>
    @push('scripts')
    <script>
    
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    @endpush
 

  
</x-layout>