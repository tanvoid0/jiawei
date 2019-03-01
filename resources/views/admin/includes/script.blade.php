<!--   Core JS Files   -->
<script src="{{ asset('admin/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('admin/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('admin/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('admin/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('admin/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('admin/js/demo.js') }}"></script>
<script src="{{ asset('js/dropify.min.js') }}"></script>
<script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element){
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<script>
    function ConfirmDelete (){
        if(confirm("Delete item?")){
            alert("Working");
        } else {

        }
    }
</script>
{{--@if(Session::has('msg'))--}}
{{--<script type="text/javascript">--}}
    {{--$(document).ready(function(){--}}

        {{--demo.initChartist();--}}

        {{--$.notify({--}}
            {{--icon: 'ti-gift',--}}
            {{--message: "{{ Session::get('msg')}}"--}}

        {{--},{--}}
            {{--type: '{{ Session::get('type') }}',--}}
            {{--timer: 4000--}}
        {{--});--}}

    {{--});--}}
{{--</script>--}}

{{--@endif--}}