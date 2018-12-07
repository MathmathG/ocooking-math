// See http://brunch.io for documentation.
exports.files = {
  javascripts: {
    joinTo: {
      'js/app.js': /^app/,
      'js/vendor.js': /^node_modules/
    }
  },
  stylesheets: {
    joinTo: {
      'css/app.css': /^app/,
      'css/vendor.css': /^node_modules/
    }
  }
};

exports.plugins = {
  sass: {
    options: {
      includePaths: ['node_modules/bootstrap/scss']
    }
  },
  copycat: {
    'fonts': ['node_modules/font-awesome/fonts']
  }
};

exports.npm = {
  enabled: true,
  styles: {
    'font-awesome': ['css/font-awesome.css']
  },
  globals: {
    '$': 'jquery',
    'jQuery': 'jquery'
  }
}

exports.modules = {
  autoRequire: {
    'js/app.js': ['app']
  }
};

exports.watcher = {
  usePolling: true,
  awaitWriteFinish: true
};
