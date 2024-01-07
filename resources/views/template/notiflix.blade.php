@if (session()->has('success'))
<script>
    Notiflix.Notify.success("{{ session('success') }}");
</script>
@elseif(session()->has('warning'));
<script>
    Notiflix.Notify.warning("{{ session('warning') }}");
</script>
@elseif(session()->has('info'))
<script>
    Notiflix.Notify.info("{{ session('info') }}");
</script>
@elseif(session()->has('failure'))
<script>
    Notiflix.Notify.failure("{{ session('failure') }}");
</script>
@endif