#!/usr/bin/perl

use strict;
use warnings;

# Testの数
my $num = <STDIN>;

#print $num;
for (my $i = 1; $i <= $num; ++$i) {
    # my @line0 = split //, <STDIN>;
    # my @line1 = split //, <STDIN>;
    # my @line2 = split //, <STDIN>;
    # my @line3 = split //, <STDIN>;

    my $line = <STDIN>;
    $line .= <STDIN>;
    $line .= <STDIN>;
    $line .= <STDIN>;
    $line =~ s/\n//g;

    #print $line . "bbbbbbbb\n";

    if (checkX_line($line)) {
        print "Case #$i: X won\n";
    } elsif (checkY_line($line)) {
        print "Case #$i: O won\n";
    } elsif ((() = $line =~ /\./g) > 0) {
        print "Case #$i: Game has not completed\n";
    } else {
        print "Case #$i: Draw\n";
    }
    #if (checkX_line(@line0) or checkX_line(@line1) or checkX_line(@line2) or checkX_line(@line3) ) {
    #    print "X won \n";
    #}
    $line = <STDIN>;
}

sub checkX_line {
    my ($line) = @_;
    #print $line . "aaaaaaa\n";
    $line =~ s/X/1/g;
    $line =~ s/T/1/g;
    $line =~ s/O/0/g;
    $line =~ s/\./0/g;

    #@line = map { $_ =~ s/X/1/g; $_ } @line;
    #@line = map { $_ =~ s/T/1/g; $_ } @line;
    #@line = map { $_ =~ s/O/0/g; $_ } @line;

    my @s = split //, $line;
    #print $s[0] . "\n";
    #print $s[1] . "\n";
    return (
        ($s[0] * $s[1] * $s[2] * $s[3] == 1) or
        ($s[4] * $s[5] * $s[6] * $s[7] == 1) or
        ($s[8] * $s[9] * $s[10] * $s[11] == 1) or
        ($s[12] * $s[13] * $s[14] * $s[15] == 1) or
        ($s[0] * $s[4] * $s[8] * $s[12] == 1) or
        ($s[1] * $s[5] * $s[9] * $s[13] == 1) or
        ($s[2] * $s[6] * $s[10] * $s[14] == 1) or
        ($s[3] * $s[7] * $s[11] * $s[15] == 1) or
        ($s[0] * $s[5] * $s[10] * $s[15] == 1) or
        ($s[12] * $s[9] * $s[6] * $s[3] == 1) ) ;
}

sub checkY_line {
    my ($line) = @_;
    #print $line . "aaaaaaa\n";
    $line =~ s/X/0/g;
    $line =~ s/T/1/g;
    $line =~ s/O/1/g;
    $line =~ s/\./0/g;

    #@line = map { $_ =~ s/X/1/g; $_ } @line;
    #@line = map { $_ =~ s/T/1/g; $_ } @line;
    #@line = map { $_ =~ s/O/0/g; $_ } @line;

    my @s = split //, $line;
    #print $s[0] . "\n";
    #print $s[1] . "\n";
    return (
        ($s[0] * $s[1] * $s[2] * $s[3] == 1) or
        ($s[4] * $s[5] * $s[6] * $s[7] == 1) or
        ($s[8] * $s[9] * $s[10] * $s[11] == 1) or
        ($s[12] * $s[13] * $s[14] * $s[15] == 1) or
        ($s[0] * $s[4] * $s[8] * $s[12] == 1) or
        ($s[1] * $s[5] * $s[9] * $s[13] == 1) or
        ($s[2] * $s[6] * $s[10] * $s[14] == 1) or
        ($s[3] * $s[7] * $s[11] * $s[15] == 1) or
        ($s[0] * $s[5] * $s[10] * $s[15] == 1) or
        ($s[12] * $s[9] * $s[6] * $s[3] == 1) ) ;
}
