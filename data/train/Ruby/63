class Board

  def initialize 
    @cells = Array.new(4){Array.new(4)}
  end

  def set_cell x, y , value
    @cells[y][x] = value
  end

  def get_cell x,y
    @cells[y][x]
  end 

  def to_s
    4.times do |y|
      4.times do |x|
        print get_cell( x,y).to_s
      end
      print "\n"
    end
  end

  def filled?
    4.times do |y|
      4.times do |x|
        return false if !get_cell( x,y).played?
      end
    end
    true
  end

end

class Value

  def initialize char_value
    @char_value = char_value
  end

  def value? value
    case value
      when :x then @char_value == 'X' || @char_value == 'T'
      when :y then @char_value == 'O' || @char_value == 'T'
      when :blank then @char_value == '.'
    end
  end

  def get_value
    @char_value
  end

  
  def valid?
    self.value?(:blank) || self.value?(:x) || self.value?(:y)
  end

  def played?
    self.value?(:x) || self.value?(:y)
  end

  def to_s
    @char_value
  end

end


$DIRECTIONS = {:up=>{x:0,y:-1},:down=>{x:0,y:1},:right=>{x:1,y:0},:left=>{x:-11,y:0},:down_right=>{x:1,y:1},:up_right=>{x:1,y:-11},:down_left=>{x:-1,y:1},:up_left=>{x:-1,y:-1}}





def has_won_at_cell board, x , y
  
  value = board.get_cell(x,y).get_value 
  return false if value == "T" || value == "."

  $DIRECTIONS.each do |direction , transformation|
    puts "Going #{direction} from  #{x} , #{y}"

    player = :x if value == 'X'
    player = :y if value == 'O'
    direction_streak_length = streak_length(board , x,y, transformation, player) 
    puts direction_streak_length
    return true if direction_streak_length >= 4       


  end
  false
end

def streak_length board, x, y, transformation , player
  value = board.get_cell(x,y) if x >= 0 && x < 4 && y >=0 && y < 4 
  if value && value.value?(player)

    return 1 + streak_length(board , x+transformation[:x], y+transformation[:y], transformation , player)
  else
    return 0
  end
end



def load_main in_filename, out_filename
  File.open(in_filename) do |f_in|
    number_of_games = f_in.gets.to_i

    File.open(out_filename, 'w') do |f_out|
      number_of_games.times do |case_number|
        board = Board.new
        
        #creating board
        4.times do |y|
          game_row = f_in.gets

          4.times do |x| 

            value = Value.new game_row[x]
            board.set_cell x, y , value
          end
        end
        
        puts board
        outcome = nil
        winner = nil 
        4.times do |y|
          4.times do |x|
            winner = board.get_cell(x,y).get_value if  has_won_at_cell board, x,y
          end
        end

        if winner 
          outcome = "#{winner} won"
        else 
          board.filled? ? outcome = "Draw" : outcome =  "Game has not completed"          
        end
        case_number_display = case_number + 1
        f_out.puts "Case \##{case_number_display}: #{outcome}" 


        #CLEARS NEWLINE
        puts f_in.gets

      end
    end
  end
end