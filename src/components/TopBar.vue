<template>
  <div id="top_bar">
    <p class="infotext">
      <span style="color: red; font-weight: bold;">
        I am no longer updating JWebGen. Do not Contact PonyIsland or anyone
        else for updates or problems.
      </span>
    </p>
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
#top_bar {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 40px;
  background: #ffffe1;
  border-bottom: 1px solid black;
  float: left;
  z-index: 2;
  font-size: 1em;
  font-weight: normal;
  display: inline;
  font-family: Arial, Verdana, sans-serif;
  text-align: left;
  color: black;
}
#top_bar:hover {
  background: #004ba8;
  color: white;
}
#top_bar p.infotext {
  float: left;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: 15px;
  margin-top: 7px;
}
#top_bar a.close {
  font-size: 14px;
  font-weight: bold;
  text-align: right;
  margin-top: 7px;
  margin-right: 15px;
  float: right;
  color: silver;
  text-decoration: none;
}
#top_bar a.close:hover {
  margin-top: 8px;
  color: white;
}
</style>