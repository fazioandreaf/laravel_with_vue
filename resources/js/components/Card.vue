<template>
    <div class="container text-dark">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{project.title}}</div>

                    <div class="card-body">
                        {{project.description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        project: Object
    },
    mounted() {
        console.log("Component mounted.",this.project);
    }
};
</script>
