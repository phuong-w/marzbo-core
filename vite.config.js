import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/assets/plugins.scss',
                'resources/sass/assets/structure.scss',
                'resources/sass/assets/loader.scss',
                'resources/sass/assets/main.scss',
                'resources/sass/assets/scrollspyNav.scss',

                // Apps
                'resources/sass/assets/apps/contacts.scss',
                'resources/sass/assets/apps/invoice-add.scss',
                'resources/sass/assets/apps/invoice-edit.scss',
                'resources/sass/assets/apps/invoice-list.scss',
                'resources/sass/assets/apps/invoice-preview.scss',
                'resources/sass/assets/apps/mailbox.scss',
                'resources/sass/assets/apps/mailing-chat.scss',
                'resources/sass/assets/apps/notes.scss',
                'resources/sass/assets/apps/scrumboard.scss',
                'resources/sass/assets/apps/todolist.scss',

                // Authentication
                'resources/sass/assets/authentication/form-1.scss',
                'resources/sass/assets/authentication/form-2.scss',
                'resources/sass/assets/components/custom-carousel.scss',
                'resources/sass/assets/components/custom-countdown.scss',
                'resources/sass/assets/components/custom-counter.scss',
                'resources/sass/assets/components/custom-list-group.scss',
                'resources/sass/assets/components/custom-media_object.scss',
                'resources/sass/assets/components/custom-modal.scss',
                'resources/sass/assets/components/custom-sweetalert.scss',
                'resources/sass/assets/components/cards/card.scss',
                'resources/sass/assets/components/tabs-accordian/custom-accordions.scss',
                'resources/sass/assets/components/tabs-accordian/custom-tabs.scss',
                'resources/sass/assets/components/timeline/custom-timeline.scss',

                // Element
                'resources/sass/assets/elements/alert.scss',
                'resources/sass/assets/elements/avatar.scss',
                'resources/sass/assets/elements/breadcrumb.scss',
                'resources/sass/assets/elements/custom-pagination.scss',
                'resources/sass/assets/elements/custom-tree_view.scss',
                'resources/sass/assets/elements/infobox.scss',
                'resources/sass/assets/elements/miscellaneous.scss',
                'resources/sass/assets/elements/popover.scss',
                'resources/sass/assets/elements/search.scss',
                'resources/sass/assets/elements/tooltip.scss',

                // Forms
                'resources/sass/assets/forms/bootstrap-form.scss',
                'resources/sass/assets/forms/custom-clipboard.scss',
                'resources/sass/assets/forms/switches.scss',
                'resources/sass/assets/forms/theme-checkbox-radio.scss',

                // Pages
                'resources/sass/assets/pages/coming-soon/style.scss',
                'resources/sass/assets/pages/error/style-400.scss',
                'resources/sass/assets/pages/error/style-500.scss',
                'resources/sass/assets/pages/error/style-503.scss',
                'resources/sass/assets/pages/error/style-maintanence.scss',
                'resources/sass/assets/pages/faq/faq.scss',
                'resources/sass/assets/pages/faq/faq2.scss',
                'resources/sass/assets/pages/privacy/privacy.scss',
                'resources/sass/assets/pages/contact_us.scss',
                'resources/sass/assets/pages/helpdesk.scss',

                // Tables
                'resources/sass/assets/tables/table-basic.scss',

                // Users
                'resources/sass/assets/users/account-setting.scss',
                'resources/sass/assets/users/user-profile.scss',

                // Widgets
                'resources/sass/assets/widgets/modules-widgets.scss',

                /*
                    ========================
                    Plugins
                    ========================
                */

                // Animate
                'resources/sass/plugins/animate/animate.scss',

                // Autocomplete
                'resources/sass/plugins/autocomplete/autocomplete.scss',

                // Bootstrap Range Slider
                'resources/sass/plugins/bootstrap-range-Slider/bootstrap-slider.scss',

                // Bootstrap Select
                'resources/sass/plugins/bootstrap-select/bootstrap-select.min.scss',

                // Bootstrap Touchspin
                'resources/sass/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.scss',

                // Drag and Drop
                'resources/sass/plugins/drag-and-drop/dragula/dragula.scss',
                'resources/sass/plugins/drag-and-drop/dragula/example.scss',

                // Dropify
                'resources/sass/plugins/dropify/dropify.min.scss',

                // Editors
                'resources/sass/plugins/editors/markdown/simplemde.min.scss',
                'resources/sass/plugins/editors/quill/quill.bubble.scss',
                'resources/sass/plugins/editors/quill/quill.snow.scss',

                // File Upload
                'resources/sass/plugins/file-upload/file-upload-with-preview.min.scss',

                // Flatpickr
                'resources/sass/plugins/flatpickr/custom-flatpickr.scss',

                // Fullcalendar
                'resources/sass/plugins/fullcalendar/custom-fullcalendar.advance.scss',
                'resources/sass/plugins/fullcalendar/fullcalendar.min.scss',
                'resources/sass/plugins/fullcalendar/fullcalendar.scss',

                // Jquery Step
                'resources/sass/plugins/jquery-step/jquery.steps.scss',

                // jVector
                'resources/sass/plugins/jvector/jquery-jvectormap-2.0.3.scss',

                // lightbox
                'resources/sass/plugins/lightbox/custom-photswipe.scss',
                'resources/sass/plugins/lightbox/photoswipe.scss',

                // Loaders
                'resources/sass/plugins/loaders/custom-loader.scss',

                // noUiSlider
                'resources/sass/plugins/noUiSlider/custom-nouiSlider.scss',

                // Perfect Scrollbar
                'resources/sass/plugins/perfect-scrollbar/perfect-scrollbar.scss',

                // Pricing Table
                'resources/sass/plugins/pricing-table/css/component.scss',

                // Select2
                'resources/sass/plugins/select2/select2.min.scss',

                // SweetAlerts
                'resources/sass/plugins/sweetalerts/sweetalert.scss',
                'resources/sass/plugins/sweetalerts/sweetalert2.min.scss',

                // DataTable
                'resources/sass/plugins/table/datatable/custom_dt_custom.scss',
                'resources/sass/plugins/table/datatable/custom_dt_html5.scss',
                'resources/sass/plugins/table/datatable/custom_dt_miscellaneous.scss',
                'resources/sass/plugins/table/datatable/custom_dt_multiple_tables.scss',
                'resources/sass/plugins/table/datatable/datatables.scss',
                // 'resources/sass/plugins/table/datatable/datatables-light.scss',
                'resources/sass/plugins/table/datatable/dt-global_style.scss',
                // 'resources/sass/plugins/table/datatable/dt-global_style-light.scss',

                // Tag Input
                'resources/sass/plugins/tagInput/tags-input.scss'
            ],
            refresh: true,
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    })
                }
            }
        }
    ],
});
