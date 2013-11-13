#!/usr/bin/env ruby

require 'pp'

def check(syms)
  case syms
  when /^[XT]{4}$/
    raise "X won"
  when /^[OT]{4}$/
    raise "O won"
  end
end


def scan(board)
  #pp board

  begin 
    # scan rows
    (0..3).each do |r|
      syms = board[r].join
      check(syms)
    end

    # scan columns
    (0..3).each do |c|
      syms = ""
      (0..3).each do |r|
        syms += board[r][c]
      end
      check(syms)
    end

    # scan diag1
    syms = ""
    (0..3).each do |r|
      syms += board[r][r]
    end
    check(syms)

    # scan diag2
    syms = ""
    (0..3).each do |r|
      syms += board[r][3-r]
    end
    check(syms)

    #
    raise board.map(&:join).join =~ /\./ ? "Game has not completed" : "Draw"
  rescue
    return $!
  end

end

n = gets.to_i

n.times do |i|
  board = []
  4.times do
    board << gets.chomp.split("")
  end
  gets
  puts "Case ##{i+1}: #{scan(board)}"
end
