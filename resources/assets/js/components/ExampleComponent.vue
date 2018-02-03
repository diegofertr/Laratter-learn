<template>    
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Componente de {{ data }}</div>
            <div class="panel-body">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
