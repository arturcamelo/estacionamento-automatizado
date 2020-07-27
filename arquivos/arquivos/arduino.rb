require 'arduino_firmata'
require 'highline/import'
require './banco.rb'

#conectando com o banco de dados
class Teste < Banco
    def initialize(a, b, c, d)
        super(a, b, c, d)
    end
end
b = Teste.new("localhost", "root", "root", "arduino")

#conectando com o arduino
ARDUINO = ArduinoFirmata.connect('/dev/ttyUSB0')

PINOMOTOR = 10 # porta do arduino
@angulo = 90
ARDUINO.servo_write(PINOMOTOR, @angulo)
sleep(1)

loop{
    
    if @angulo != 90
        ARDUINO.servo_write(PINOMOTOR, @angulo)
    end

    senha = ask("====== Digite sua senha ======\n") { |q| q.echo = "*" }
  
    #Consultando o banco de dados
    # se nome e senha iguais
    b.connect
    if b.selectSenhas.include?(senha.to_i)
        @angulo = 20
        ARDUINO.servo_write(PINOMOTOR,  @angulo)
        puts "Bem vindo!"
        sleep(5)
        @angulo = 90
        ARDUINO.servo_write(PINOMOTOR, @angulo)
        b.closy # Fechando a conexão
    else
        puts "Usuário não cadastrado!"
        b.closy # Fechando a conexão
    end
    
    sleep(1)
    system("clear")
}