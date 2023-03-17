pipeline {
  agent any
  stages {
    stage('Checkout Code') {
      steps {
        git(url: 'https://github.com/hightower9/laravel-company-api', branch: 'dev')
      }
    }

    stage('') {
      steps {
        sh 'ls -al'
      }
    }

  }
}