<template>
  <div id="navMenu">
    <ul>
      <li id="navIndex">
        <router-link to="/">Home</router-link>
      </li>
      <li id="navLookup">
        <router-link to="/lookup">Lookup</router-link>
      </li>
      <li id="navGenerate">
        <router-link to="/generate">Generate</router-link>
      </li>
      <li id="navStarter">
        <router-link to="/starter">Starter</router-link>
      </li>
      <li id="navStarterOO">
        <router-link to="/starterOO">Starter OO</router-link>
      </li>
      <li id="navBreed">
        <router-link to="/breed">Breed</router-link>
      </li>
      <li id="navBreedOO">
        <router-link to="/breedOO">Breed OO</router-link>
      </li>
      <li id="navLove">
        <router-link to="/love">Love</router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data: function() {
    return {};
  }
};
</script>

<style scoped>
#navMenu {
  width: 800px;
  margin: 0px auto;
}

#navMenu ul {
  border-bottom: 1px solid black;
  height: 27px;
  padding-left: 0px;
}

#navMenu li {
  display: inline;
  float: left;
  padding: 5px;
  background-color: #ccc;
  margin-left: 5px;
  border: 1px solid black;
  -moz-border-top-left-radius: 10px;
  border-top-left-radius: 10px;
  -moz-border-top-right-radius: 10px;
  border-top-right-radius: 10px;
  width: 75px;
  text-align: center;
}

#navMenu a {
  display: block;
}

#navMenu a:hover {
}
</style>