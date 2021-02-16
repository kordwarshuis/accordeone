module.exports = {

  // https://cli.vuejs.org/config/#publicpath

  //=============
  // BTC version
  publicPath: process.env.NODE_ENV === 'production' ? '/a/keri/' : '/',
  //=============

  lintOnSave: false
};