#!/usr/bin/env ruby

def status rows
  cols = rows.transpose
  diags = [(0..3).collect { |i| rows[i][i] }, (0..3).collect { |i| rows[i][3-i] }]
  ['X', 'O'].each do |player|
    return "#{player} won" if rows.any? { |chars| chars.all? {|c| [player, 'T'].include?(c) } }
    return "#{player} won" if cols.any? { |chars| chars.all? {|c| [player, 'T'].include?(c) } }
    return "#{player} won" if diags.any? { |chars| chars.all? {|c| [player, 'T'].include?(c) } }
  end
  return "Draw" if rows.all? { |chars| chars.all? {|c| c != '.' } }
  return "Game has not completed"
end

gets.to_i.times do |i|
  rows = []
  4.times { rows << gets.chomp.split('') }
  puts "Case ##{i+1}: #{status(rows)}"
  gets
end
