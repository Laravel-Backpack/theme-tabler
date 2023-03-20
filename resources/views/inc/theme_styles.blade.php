@basset('https://unpkg.com/bootstrap@5.2.3/dist/css/bootstrap.min.css')
@basset('https://unpkg.com/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css')
@basset('https://unpkg.com/animate.css@4.1.1/animate.compat.css')
@basset('https://unpkg.com/noty@3.2.0-beta-deprecated/lib/noty.css')

@basset('https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css')

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
{{-- TODO: We should use Basset for Google Fonts too, but it doesn't quite work yet: --}}
{{-- @basset('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400&display=swap',
true, [], 'style') --}}

{{-- Custom Backpack Rules --}}
@basset(base_path('vendor/backpack/crud/src/resources/assets/css/backpack_colors.css'))
@basset(base_path('vendor/backpack/crud/src/resources/assets/css/tabler.css'))
@basset(base_path('vendor/backpack/crud/src/resources/assets/css/common.css'))
