<template>
    <div class="wrapper-controls">
        <button 
            v-on:click="newGame"
            class="control btn-new"><i class="ion-ios-plus-outline"></i>New game</button>
        <button 
            v-on:click="rollDice"
            class="control btn-roll"><i class="ion-ios-loop"></i>Roll dice</button>
        <button 
            v-on:click="$emit('handleHoldScore')"
            class="control btn-hold"><i class="ion-ios-download-outline"></i>Hold</button>
        
        <input 
            v-bind:disabled="isPlaying"
            v-bind:value="finalScore"
            v-on:input="$emit('handleChangeFinalScore', $event)"
            type="number" placeholder="Final score" class="final-score">
        <!-- <input 
            v-bind:value="valueDemo"
            v-on:input="valueDemo = $event.target.value"
            type="number" placeholder="Final score" class="final-score"> -->
<!-- 
    1. Ràng buộc dữ liệu (Thuộc tính HTML) -> v-bind
        1 chiều từ data -> input

    2. Ràng buộc dữ liệu 2 chiều  -> v-model
        - 1 chiều từ data -> input
        - 1 chiều từ input -> data

    Nếu như nó không phải là data trực tiếp cảu Componet Controls -> Nó không được phép thay đổi
 -->
    </div>
</template>

<script>
export default {
    name: 'controls',
    props: {
        finalScore: { type: [Number, String], default: 100 },
        isPlaying: { type: Boolean, default: false }
    },
    data() {
        return {
            valueDemo: 100
        }
    },
    methods: {
        // handleInput(e) {
        //     this.valueDemo = e.target.value;
        //     // console.log(e.target.value);
        // },
        newGame() {
            console.log('newGame Controls.vue');
            // Kích hoạt sự kiện handleNewGame của App truyền vào
            this.$emit('handleNewGame');
        },
        rollDice() {
            console.log('rollDice Controls.vue');
            this.$emit('handleRollDice');
        }
    }
}
</script>

<style>
.control {
    position: absolute;
    width: 200px;
    left: 50%;
    transform: translateX(-50%);
    color: #555;
    background: none;
    border: none;
    font-family: Lato;
    font-size: 20px;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: 300;
    transition: background-color 0.3s, color 0.3s;
}
.control.disable {
    pointer-events: none;
}

.control:hover { font-weight: 600; }
.control:hover i { margin-right: 20px; }

.control:focus {
    outline: none;
}

.control i {
    color: #42b983;
    display: inline-block;
    margin-right: 15px;
    font-size: 32px;
    line-height: 1;
    vertical-align: text-top;
    margin-top: -4px;
    transition: margin 0.3s;
}

.btn-new { top: 45px;}
.btn-roll { top: 403px;}
.btn-hold { top: 467px;}

.final-score {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 520px;
    color: #555;
    font-size: 18px;
    font-family: 'Lato';
    text-align: center;
    padding: 10px;
    width: 160px;
    text-transform: uppercase;
}

.final-score:focus { outline: none; }
</style>
