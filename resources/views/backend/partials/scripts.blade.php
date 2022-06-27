@jquery()
@toastr_js()
@toastr_render()

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>

<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('assets/backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('assets/backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
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
<!--end::Javascript-->