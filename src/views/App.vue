<template>
  <v-app>
    <TopBar/>
    <p>
      <br>
      <br>
    </p>
    <NavMenu/>
    <v-content>
      <router-view></router-view>
    </v-content>
    <Footer/>
  </v-app>
</template>

<script>
import TopBar from "../components/TopBar.vue";
import GoogleAd from "../components/GoogleAdd.vue";
import NavMenu from "../components/NavMenu.vue";
import Footer from "../components/Footer.vue";
export default {
  data: function() {
    return {
      greeting: "Hello"
    };
  },
  components: {
    TopBar,
    GoogleAd,
    NavMenu,
    Footer
  }
};
</script>

<style scoped>
/* body {
  margin: 0px;
  padding: 0px;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: small;
  background-color: #fff;
}

img {
  border: none;
}

div#content,
div#footer,
#navMenu {
  width: 800px;
  margin: 0px auto;
}
span.formLabel {
  float: left;
  width: 6em;
  display: inline;
}
span.hexColor {
  margin-top: 0px;
  padding: 0em 1em;
} */
</style>