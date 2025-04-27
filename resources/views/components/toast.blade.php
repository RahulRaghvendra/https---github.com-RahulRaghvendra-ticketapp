@if (session()->has('success') || session()->has('error') || session()->has('warning') || session()->has('info') || $errors->any())
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        @if (session()->has('success'))
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        @endif

        @if (session()->has('error'))
            Toast.fire({
                icon: "error",
                title: "{{ session('error') }}"
            });
        @endif

        @if (session()->has('warning'))
            Toast.fire({
                icon: "warning",
                title: "{{ session('warning') }}"
            });
        @endif

        @if (session()->has('info'))
            Toast.fire({
                icon: "info",
                title: "{{ session('info') }}"
            });
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: "error",
                    title: "{{ $error }}"
                });
            @endforeach
        @endif
    </script>
@endif
