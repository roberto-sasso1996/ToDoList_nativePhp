<x-layout>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="text-center display-2 mt-4">
                    To Do List
                </h1>
            </div>
            <div class="col-12 d-flex justify-content-center mt-2">
                <img src="/img/homeLogo.png" alt="" width="120px" height="120px">
            </div>
            <div class="col-12 d-flex justify-content-center my-5">
                <livewire:to-do-create />
            </div>
            <div class="col-12 d-flex justify-content-center">
                <livewire:to-do-list />
            </div>
        </div>
    </div>
</x-layout>
