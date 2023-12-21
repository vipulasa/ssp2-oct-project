@props([
    'type' => 'page_view',
    'page' => request()->getUri()
    ])
<div x-data="{
    init() {
        fetch('/analytic-hit?analytic_type={{ $type }}&page={{ $page }}')
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.log(error))
    },
}"></div>
