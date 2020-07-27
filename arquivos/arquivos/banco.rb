require "mysql2"

class Banco
    def initialize(host, username, password, database)
        @host = host
        @username = username
        @password = password
        @database = database
    end
    def connect 
        @client = Mysql2::Client.new(
            :host => @host,
            :username => @username,
            :password => @password,
            :database => @database    
        )
    end
    def selectSenhas
        @dados = @client.query("SELECT * FROM pessoas");
        vetorSenhas = []
        @dados.each do |linha|
            vetorSenhas << linha["senha"]
        end
        return vetorSenhas
    end
    def closy
       @client.close
    end
end
