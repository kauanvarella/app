pipeline {
    agent { dockerfile true }
    stages {       
        stage ('Copiando o app para dentro da instancia') {
            steps {
                sh 'chmod 600 ssh-prod-meuapp.pem'
                withCredentials([sshUserPrivateKey(credentialsId: 'private-key', keyFileVariable: 'private_key', usernameVariable: 'ubuntu')]) {
                    sh 'cp /home/kauan/.jenkins/workspace/pipeline-app@tmp/www /www'
                }                
            }
        }
        stage('Deploy da aplicacao') {
            steps {
                ansiblePlaybook credentialsId: 'private-key', disableHostKeyChecking: true, installation: 'ansible', inventory: 'hosts.inv', playbook: 'playbook.yml'                                    
            }
        }
        // stage('Teste2') {
        //     steps {
              
        //     }
        // }    
    }
}