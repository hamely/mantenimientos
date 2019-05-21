<template>
    <div>
        <h2 class="text-center">Captura tus ideas</h2>
        <div class="well">
            <h4>¿En que estás pensando?</h4>
            <form>
                <div class="input-group">
                    <input type="text" class="form-control input-sm" v-model="newIdea" maxlength="256">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Agregar
                        </button>
                    </span>
                </div>
            </form>
            <hr>
            <ul class="list-unstyled">

            </ul>
        </div>
    </div>

</template>

<script>
    export default {

    }
</script>
