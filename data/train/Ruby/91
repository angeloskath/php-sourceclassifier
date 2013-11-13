def answer(test_number, ans)
  puts "Case ##{test_number}: #{ans}"
end

def x_won(candidates)
  candidates.each do |candidate|
    if candidate.select{|val| val == 'X' || val == 'T'}.count == candidate.count
      return true
    end
  end
  false
end

def o_won(candidates)
  candidates.each do |candidate|
    if candidate.select{|val| val == 'O' || val == 'T'}.count == candidate.count
      return true
    end
  end
  false
end

def solve(test_number)
  board = []
  4.times do
    board << STDIN.readline.strip.split('')
  end
  STDIN.readline rescue nil
  candidates = []
  candidates = candidates + board
  candidates = candidates + (board.transpose)
  candidates = candidates << ((0..3).map{|i| board[i][i]})
  candidates = candidates << ((0..3).map{|i| board.reverse[i][i]})

  if x_won(candidates)
    answer(test_number, "X won")
    return
  end

  if o_won(candidates)
    answer(test_number, "O won")
    return
  end

  if candidates.flatten.include? '.'
    answer(test_number, "Game has not completed")
    return
  end

  answer(test_number, "Draw")

end

tests = STDIN.readline.strip.to_i

tests.times do |t|
  solve t+1
end
