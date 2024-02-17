module.exports = function(api) {
    api.cache(true);
  
    const presets = [
      "@babel/preset-react"
    ];
    const plugins = [
      // Add any additional plugins you might need
    ];
  
    return {
      presets,
      plugins
    };
  }
  