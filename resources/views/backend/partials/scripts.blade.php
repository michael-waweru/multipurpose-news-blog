@jquery()
@toastr_js()
@toastr_render()


<!--begin::Global Javascript Bundle(used by all pages)-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/backend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript-->
    <script src="{{ asset('assets/backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript-->
    <script src="{{ asset('assets/backend/js/custom/apps/file-manager/list.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/apps/customers/list/export.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/apps/customers/list/list.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/apps/customers/add.js') }}"></script>
    <script src="{{ asset('assets/backend/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/intro.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Page Custom Javascript-->

    {{-- tags js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
    
    <!-- Summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!--end::Javascript-->