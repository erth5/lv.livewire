
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- The "defer" attribute is important to make sure Alpine waits for Livewire to load first. -->

<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>


<button x-data="{clicks:0}" @click="clicks++" :disabled="clicks>6">Some Button</button>

