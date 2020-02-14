@component('layouts.app')

@slot('title') User Settings @endslot

<settings></settings>

@slot('script')
<script src="//{{ Request::getHost() }}/socket.io/socket.io.js"></script>
<script src="{{ mix('/js/users/settings.min.js') }}"></script>
@endslot

@endcomponent
